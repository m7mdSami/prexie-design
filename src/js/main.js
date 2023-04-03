document.addEventListener('DOMContentLoaded', function () {
    // var stepper = new Stepper(document.querySelector('.bs-stepper'))

    document.querySelector('#select-date').addEventListener('focus', function () {
        console.log(999)
        new bootstrap.Modal(document.getElementById('select-date-modal')).show();
    });

    const elem = document.querySelector('#date-picker');
    const datepicker = new Datepicker(elem, {
    // ...options
    });
})