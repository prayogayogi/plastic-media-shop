<footer class="footer mt-auto">
    <div class="copyright bg-white text-center">
        <p>Copyright &copy; <span id="copy-year"></span> by <a class="text-primary" href="{{ route("dashboard") }}" target="_blank">Media Plastik - All Rights Reserved.</a>.</p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>
