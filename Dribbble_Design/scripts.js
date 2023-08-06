$(document).ready(function() {
    $.get('get_hero_content.php', function(data) {
        $('.hero-description').text(data);
    });

    $('#admin-login-form').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.post('login_handler.php', formData, function(response) {
            if (response === 'success') {
                window.location.href = 'admin_panel.php';
            } else {
                $('#login-error').text('Invalid login credentials');
            }
        });
    });
    $('#update-hero-form').on('submit', function(e) {
        e.preventDefault();

        var newHeroContent = $('#heroContent').val();

        $.post('update_hero_content.php', { heroContent: newHeroContent }, function(response) {
            if (response === 'success') {
                window.location.href = 'admin_panel.php?message=content_updated';
            } else {
                $('#update-error').text('Error updating content');
            }
        });
    });
});
$(document).ready(function() {
    $.get('get_hero_content.php', function(data) {
        $('.hero-description').text(data);
    });

    $('#admin-login-form').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.post('login_handler.php', formData, function(response) {
            if (response === 'success') {
                window.location.href = 'admin_panel.php';
            } else {
                $('#login-error').text('Invalid login credentials');
            }
        });
    });
    $('#update-hero-form').on('submit', function(e) {
        e.preventDefault();

        var newHeroContent = $('#heroContent').val();

        $.post('update_hero_content.php', { heroContent: newHeroContent }, function(response) {
            if (response === 'success') {
                window.location.href = 'admin_panel.php?message=content_updated';
            } else {
                $('#update-error').text('Error updating content');
            }
        });
    });
});
