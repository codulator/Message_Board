$(document).ready ( function () {

    $("#login").validate( {
        rules: {
            username: "required",
            password: {
               required : true,
               minlength: 5,
            },
        },

        messages: {
            username: "Please enter your username",
            password: {
                required: "Please enter your password",
                minlength: "Password must be at least 5 characters long",
            },
        },

    });
});

$(document).ready ( function () {

    $("#register").validate( {
        rules: {
            usernameSignup: "required",
            email: {
                email: true,
                required : true,
            },
            password: {
               required : true,
               minlength: 5,
            },
            passConfirm: {
                required: true,
                equalTo: "#password",
            },
        },

        onkeyup:false,
        messages: {
            username: "Please enter your username",
            passwordSignup: {
                required: "Please enter your password",
                minlength: "Password must be at least 5 characters long",
            },

            email: {
                email: "Please enter a valid email",
                required: "Please enter an email",
            },
            passConfirm: {
                required: "Confirm your password",
                equalTo: "Passwords do not match",
            },
        },

    });
});
