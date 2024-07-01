document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById("paymentModal");
    var btn = document.querySelector(".open-modal-btn");
    var span = document.querySelector(".close-btn");

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
