window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible || location.pathname !== '/') {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

(function ($) {

    // forms handling
    const forms = document.querySelectorAll('.js-form');
    const validationInputs = document.querySelectorAll('[required]');

    if (forms) {
        forms.forEach(function (form) {
            form.onsubmit = handleSubmit;
        });
    }

    if (validationInputs) {
        validationInputs.forEach(function (input) {
            input.onblur = validateFieldOnBlur
        });
    }

    function handleSubmit(event) {
        event.preventDefault();
        if (validateForm(event.currentTarget)) {

            $form = $(event.currentTarget);
            $submitter = $form.find('[type=submit]');

            $submitter.prop('disabled', true)

            let data = {
                action: $form.data('action'),
                _wpnonce: siteData.ajax_nonce,
                fields: $form.serialize()
            }

            $.ajax({
                url: siteData.ajax_url,
                data: data,
                method: "POST",
            }).done(function (data) {
                $submitter.prop('disabled', false)
                $form.find(`[data-submit=${data.status}]`).show()
                $form[0].reset()
            })
        }
    }

    $('.js-popup-closer').on('click', closePopup)
    function closePopup(e) {
        e.preventDefault()
        $(e.target).closest('.js-popup').removeClass('is--active')
        bodyFixScroll(0)
    }

    function validateFieldOnBlur(event) {
        var input = event.target;
        var parent = input.closest('.js-field');
        if (input.value.trim() !== '') {
            if (input.type === 'email' && !isValidEmail(input.value.trim())) {
                parent.classList.add('is--error');
            } else if (input.type === 'tel' && !isValidPhone(input.value.trim())) {
                parent.classList.add('is--error');
            } else {
                parent.classList.remove('is--error');
            }
        } else {
            parent.classList.add('is--error');
        }
    }

    const inputmaskInputs = document.querySelectorAll('[type="tel"]');
    const im = new Inputmask('+7 (999) 999-99-99');
    im.mask(inputmaskInputs);

    function validateForm(form) {
        var inputs = form.querySelectorAll('[required]');
        var errorElements = form.querySelectorAll('.js-field');
        errorElements.forEach(function (errorElement) {
            return errorElement.classList.remove('is--error');
        });
        var isValid = true;
        inputs.forEach(function (input) {
            var parent = input.closest('.js-field');
            if (input.value.trim() === '') {
                parent.classList.add('is--error');
                isValid = false;
            } else if (input.type === 'email' && !isValidEmail(input.value.trim())) {
                parent.classList.add('is--error');
                isValid = false;
            } else if (input.type === 'tel' && !isValidPhone(input.value.trim())) {
                parent.classList.add('is--error');
                isValid = false;
            }
        });
        return isValid;
    }

    function isValidEmail(email) {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }

    function isValidPhone(phone) {
        var phonePattern = /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
        return phonePattern.test(phone);
    }

})(jQuery)