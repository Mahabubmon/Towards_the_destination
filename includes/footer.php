<!-- start footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 গন্তব্যের দিকে. All Rights Reserved.</p>
</footer>
<!-- end footer -->


<!-- javascript section -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="./js/all.min.js"></script>
<script src="./js/script.js"></script>





</body>

</html>
<script>
    function toggleSidebar() {
        $('.sidebar').toggleClass('active');
        $('#closeBtn').toggle(); // Toggle close button visibility
    }

    function closebtn() {
        $('.sidebar').removeClass('active');
        $('#closeBtn').hide(); // Hide close button
    }



    $(document).ready(function () {
        $('#featuredCarousel').carousel();
    });
</script>