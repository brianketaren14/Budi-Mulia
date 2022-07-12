<footer class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top;">
    <div class="col-md-4 d-flex align-items-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3313/3313480.png" alt="logo" width="40" height="40" class="mb-3 me-2 mb-md-0">
        <span class="text-muted">© 2022 UTS SI2</span>
    </div>
    <div class="col-md-4 text-center">
        <h3 id="jam" class="ms-2"></h3>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="" class="me-2" style="width:24px; height:24px"></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174848.png" alt="" class="me-2" style="width:24px; height:24px"></a></li>
        <li class="ms-3"><a class="text-muted" href="https://www.twitter.com/"><img src="https://cdn-icons-png.flaticon.com/512/174/174876.png" alt="" class="me-2" style="width:24px; height:24px"></a></li>
    </ul>
</footer>

<script>
    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;

        setTimeout(startTime, 200);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }
    startTime();
</script>

</body>

</html>