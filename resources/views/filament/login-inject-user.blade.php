<div>
    <div class="bg-inject bg-adminPanel">
    </div>
</div>

<script defer>
    function applyCustomStyles() {
        const main = document.querySelector('.fi-simple-main');
        if (main) {
            main.classList.remove('shadow-sm');
            main.classList.add('shadow-lg');
            main.style.background = 'linear-gradient(to top, #FFFFFF -40%, #BCE194 50%, #9fde5b 100%)';
        }

        const img = document.querySelector('.fi-logo');
        if (img) {
            img.src = "{{ asset('assets/images/adminLoginfoto.png') }}";
            img.style.height = '12rem';
        }

        const sign_in_element = document.querySelector('.fi-simple-header-heading');
        if (sign_in_element) {
            sign_in_element.textContent = 'Login User';
            sign_in_element.classList.add('pt-2');
        }
    }

    // Initial application
    applyCustomStyles();

    document.addEventListener("DOMContentLoaded", () => {
        console.log('bitch ass nigga')
        observeElement('.fi-logo', () => {
            const img = document.querySelector('.fi-logo');

            if (img) {
                img.src = "{{ asset('assets/images/adminLoginfoto.png') }}";
                img.style.height = '12rem';
            }
        });
    });
</script>
