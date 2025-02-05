<script>
    window.currentPanel = "{{ Filament\Facades\Filament::getCurrentPanel()?->getId() }}";
    currPanel = window.currentPanel;
    // console.log("Current Filament Panel:", window.currentPanel);
    const elements = document.querySelector('.fi-sidebar-group-items');
    const lastListItem = Array.from(elements.children).find(item => item.classList.contains('fi-active'));
    const anchor = lastListItem.querySelector('a');

    if (anchor) {
        // Extract attributes from the anchor tag
        const href = anchor.getAttribute('href');
        const classes = anchor.getAttribute('class');
        const label = anchor.querySelector('.fi-sidebar-item-label');

        // Clone the label to avoid modifying the original one
        const clonedLabel = label.cloneNode(true);

        // Change the text from "Lowongan" to "Keluar" in the cloned label
        if (clonedLabel) {
            const originalText = clonedLabel.textContent || clonedLabel.innerText; // Get the original text
            clonedLabel.innerHTML = clonedLabel.innerHTML.replace(originalText, "Keluar");

        }

        // console.log(clonedLabel.parentNode)
        clonedLabel.classList.remove('font-medium');
        clonedLabel.classList.remove('text-gray-700');
        clonedLabel.classList.add('font-bold');
        clonedLabel.setAttribute('style', 'color: #F8AC18;');

        // New icon to replace the existing one
        const newIcon = `
            <svg class="fi-dropdown-list-item-icon h-6 w-6 text-[#F8AC18]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#F8AC18" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"></path>
                <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"></path>
            </svg>
        `;

        // Create a form element
        const form = document.createElement('form');
        form.method = 'POST';


        form.action = currPanel + '/logout'; // Adjust the logout route as needed
        form.className = classes;
        form.classList.remove('bg-gray-100');

        // Add CSRF token input for Laravel
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = '<?php echo csrf_token(); ?>'; // Replace with actual CSRF token if available in the template
        form.appendChild(csrfInput);

        // Add the new icon and modified cloned label to the form
        form.innerHTML += newIcon + clonedLabel.outerHTML;

        // Duplicate the list item
        const newListItem = lastListItem.cloneNode(true);



        // Find the anchor in the duplicated list item and replace it with the form
        const duplicatedAnchor = newListItem.querySelector('a');
        if (duplicatedAnchor) {
            duplicatedAnchor.parentNode.replaceChild(form, duplicatedAnchor);
        }

        // Append the duplicated list item to the parent container
        lastListItem.parentElement.appendChild(newListItem);


        // Add pointer cursor style for the new list item
        newListItem.style.cursor = 'pointer';

        // Add an event listener to the new list item to trigger form submission on click
        newListItem.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default link behavior
            form.submit(); // Programmatically submit the form
        });
    }
</script>
