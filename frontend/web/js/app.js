
      
document.addEventListener('DOMContentLoaded', function(event) {
    
    new PhoneMaskInputRus('input[data-tel-input]');

    let feedbackForms = document.querySelectorAll('form[data-feedback-form]');

    feedbackForms.forEach((form) => {
        form.addEventListener('submit', (submitEvent) => {
            submitEvent.preventDefault();
            fetch(form.action, {
                method: form.method,
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector("[name=csrf-token]").content,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new FormData(form),
            })
            .then((response) => {
                if (!response.ok) {
                    window.location.reload();
                }
            })
            .then(data => {
                document.querySelectorAll('.ajax_form').forEach((form) => {
                    form.reset();
                });
                form.classList.remove('modal--active');
                document.querySelector('.modal--thanks').classList.add('modal--active');
            });

        });
    });
    
});