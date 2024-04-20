// script.js
document.getElementById("buyNowBtn").addEventListener("click", function() {
    document.getElementById("paymentModal").style.display = "block";
});

document.querySelector(".close").addEventListener("click", function() {
    document.getElementById("paymentModal").style.display = "none";
});

window.addEventListener("click", function(event) {
    if (event.target == document.getElementById("paymentModal")) {
        document.getElementById("paymentModal").style.display = "none";
    }
});

document.getElementById("paymentForm").addEventListener("submit", function(event) {
    event.preventDefault();
    // Here you would handle the payment process
    alert("Payment successful!");
    document.getElementById("paymentModal").style.display = "none";
});
