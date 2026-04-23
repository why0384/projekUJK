</div>

<footer class="bg-light text-center mt-auto p-3">
    <p class="mb-0">&copy; 2026 Aplikasi Manajemen Data Pegawai</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    setTimeout(function() {
        let alertBox = document.getElementById('alert-success');
        if (alertBox) {
            alertBox.style.transition = "opacity 0.5s";
            alertBox.style.opacity = "0";

            setTimeout(() => {
                alertBox.remove();
            }, 500);
        }
    }, 2000);
</script>
</body>
</html>