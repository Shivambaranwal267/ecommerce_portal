<footer class="text-center p-3 theme-footer text-light" >
© 2025 E Commerce. All Rights Reserved. Designed and Developed by Shivam Baranwal.
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const alert = document.getElementById("success-alert");
            if (alert) {
                setTimeout(() => {
                    const bsAlert = new bootstrap.Alert(alert);
                    bsAlert.close();
                }, 2000); // 2 seconds
            }
        });
    </script>
  </body>
</html>
