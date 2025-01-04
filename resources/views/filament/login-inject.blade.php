<div>
    <div class="bg-inject bg-login"></div>
</div>

<script defer>
    const main = document.querySelector('.fi-simple-main');

    main.classList.remove('shadow-sm');
    main.classList.add('shadow-lg');

    main.style = 'background: linear-gradient(to top, #FFFFFF -40%, #BCE194 50%, #9fde5b 100%);';

    const img = document.querySelector('.fi-logo');

    img.src = "{{ asset('assets/images/logo-hrd.png') }}";
    img.style.height = '12rem';

    const sign_in_element = document.querySelector('.fi-simple-header-heading');

    sign_in_element.textContent = 'Login HRD';

    const email_address = Array.from(document.querySelectorAll('span')).find(el => el.textContent.trim().includes(
        'Email address'));



    // img.setAttribute('src', url('assets/images/latar-loginHrd.svg'));

    const container = document.querySelector('.fi-simple-main');

    console.log(container);
</script>
