$(document).ready(function () {
    $('.login-form').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/raj/el-est-resp/jqAjax-test/login.php",
            data: formData,
            dataType: "JSON",
            success: function (response) {
                if (response['error']) {
                    alert(response['errorMessage']);
                } else if (response['success']) {
                    if (response['isAdmin'])
                        location.href = '/raj/el-est-resp/jqAjax-test/admin.php';
                    else {
                        alert(response['successMessage']);
                        location.reload()
                    }
                }
            },
            error: function (a, b, c) { console.log(a, b, c); }
        });
    });

    $('.signup-form').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        $.ajax({
            type: "POST",
            url: "/raj/el-est-resp/jqAjax-test/signup.php",
            data: formData,
            dataType: "JSON",
            success: function (response) {
                if (response['error']) {
                    alert(response['errorMessage']);
                } else if (response['success']) {
                    alert(response['successMessage']);
                    location.reload();
                }
            },
            error: function (error) { console.log(error); }
        });
    });

    $('.delete-account-link').click(function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to log out?')) {
            $.ajax({
                type: "GET",
                url: "/raj/el-est-resp/jqAjax-test/logout.php",
                data: {
                    action: 'delete'
                },
                dataType: "JSON",
                success: function (response) {
                    if (response['error']) { alert(response['errorMessage']) }
                    if (response['success']) {
                        alert(response['successMessage']);
                        location.reload();
                    }
                }
            });
        }
    });

    $('.logout-link').click(function (e) {
        e.preventDefault();
        if (confirm('Are you sure you want to log out?')) {
            $.ajax({
                type: "GET",
                url: "/raj/el-est-resp/jqAjax-test/logout.php",
                data: {
                    action: 'logout'
                },
                dataType: "JSON",
                success: function (response) {
                    if (response['error']) { alert(response['errorMessage']) }
                    if (response['success']) {
                        alert(response['successMessage']);
                        location.reload();
                    }
                }
            });
        }
    });

    $('.contact-form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "/raj/el-est-resp/jqAjax-test/feedback.php",
            data: $(this).serialize(),
            success: function (_response) {
                alert('Thank you for your feedback!')
            },
            error: function (error) { console.log(error); }
        });
    });

    /*****************  Admin site *****************/

    // Listing
    $('.list-flats').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-flat.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    $('.list-up').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-upcoming-project.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    $('.list-rtmi').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-rtmi.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    $('.list-cp').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-commercial-property.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    $('.list-users').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'list/list-users.php',
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord()
            }
        })
    });

    $('.list-agents').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'list/list-agents.php',
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord()
            }
        })
    });

    $('.list-user-feedbacks').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-user-feedbacks.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    $('.list-temp').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "list/list-temp.php",
            success: function (response) {
                $('.main-section').html(response);
                deleteRecord();
            }
        });
    });

    function deleteRecord() {
        $('.delete-btn').click(function (e) {
            var id = e.target.closest('.record').getAttribute('data-record-id')
            var type = e.target.closest('.record').getAttribute('data-record-type')
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {
                    id: id,
                    type: type
                },
                dataType: "JSON",
                success: function (response) {
                    // console.log(response);
                    if (response['success'])
                        $(`.record[data-record-id="${id}"]`).remove();
                    console.log(response);
                }
            });
        });
    }

    // Adding
    $('.add-flat').submit(function (e) { 
        e.preventDefault();
        let formData = new FormData(this);
        let flatImages = $('#flat-images')[0].files;
        if (flatImages.length === 3) {
            formData.append('image--1', flatImages[0])
            formData.append('image--2', flatImages[1])
            formData.append('image--3', flatImages[2])
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "./controllers/add-flat.php",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "JSON",
                success: function (response) {
                    if (response['success']) {
                        alert('Added Successfully')
                        console.log(response);
                        // location.reload()
                    }
                }
            });
        } else {
            alert('choose 3 files only...')
        }
    });

    $('.add-cp').submit(function (e) { 
        e.preventDefault();
        let formData = new FormData(this);
        let cpImages = $('#cp-images')[0].files;
        if (flatImages.length === 3) {
            formData.append('image--1', cpImages[0])
            formData.append('image--2', cpImages[1])
            formData.append('image--3', cpImages[2])
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "./controllers/add-commercial-property.php",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "JSON",
                success: function (response) {
                    if (response['success']) {
                        alert('Added Successfully')
                        location.reload()
                    }
                }
            });
        } else {
            alert('choose 3 files only...')
        }
    });

    $('.add-up').submit(function (e) { 
        e.preventDefault();
        let formData = new FormData(this);
        let upImages = $('#up-images')[0].files;
        if (flatImages.length === 3) {
            formData.append('image--1', upImages[0])
            formData.append('image--2', upImages[1])
            formData.append('image--3', upImages[2])
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "./controllers/add-upcoming-project.php",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "JSON",
                success: function (response) {
                    if (response['success']) {
                        alert('Added Successfully')
                        location.reload()
                    }
                }
            });
        } else {
            alert('choose 3 files only...')
        }
    });

    $('.add-rtmi').submit(function (e) { 
        e.preventDefault();
        let formData = new FormData(this);
        let rtmiImages = $('#rtmi-images')[0].files;
        if (flatImages.length === 3) {
            formData.append('image--1', rtmiImages[0])
            formData.append('image--2', rtmiImages[1])
            formData.append('image--3', rtmiImages[2])
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "./controllers/add-ready-to-move-in.php",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "JSON",
                success: function (response) {
                    if (response['success']) {
                        alert('Added Successfully')
                        location.reload()
                    }
                }
            });
        } else {
            alert('choose 3 files only...')
        }
    });

    $('.add-agent').submit(function (e) { 
        e.preventDefault();
        let formData = new FormData(this);
        let agentImage = $('#agent-image')[0].files;
        if (agentImage.length === 1) {
            formData.append('image--1', agentImage[0])
            console.log(formData);

            $.ajax({
                type: "POST",
                url: "./controllers/add-agent.php",
                processData: false,
                contentType: false,
                data: formData,
                dataType: "JSON",
                success: function (response) {
                    if (response['success']) {
                        alert('Added Successfully')
                        // location.reload()
                        console.log(response);
                    }
                }
            });
        } else {
            alert('choose 1 files only...')
        }
    });
});
