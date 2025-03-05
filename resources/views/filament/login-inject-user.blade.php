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

<script defer>
    const formActions = document.querySelector('.fi-form-actions');

    const divContainer = document.createElement('div');
    divContainer.className = 'fi-ac gap-3 grid grid-cols-[repeat(auto-fit,minmax(0,1fr))]';

    const button = document.createElement('button');
    button.className =
        'fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 fi-ac-action fi-ac-btn-action';
    button.type = 'button';
    button.style = '--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);';
    button.onclick = function() {
        window.location = '{{ route('login.google') }}';
    };

    // Create and add image to button
    const img = document.createElement('img');
    img.src = '{{ asset('assets/images/logo-google.png') }}';
    img.alt = 'Google logo';
    img.className = 'h-4 mr-2 rounded-md';
    button.appendChild(img);

    // Set button text content
    const text = document.createTextNode('Login with Google');
    button.appendChild(text);

    divContainer.appendChild(button);
    formActions.appendChild(divContainer);

    formActions.className = 'fi-form-actions grid gap-4';
</script>
