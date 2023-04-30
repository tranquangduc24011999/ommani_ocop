<header class="topbar" style="position: fixed; top: 0;">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background-color: #039252">
        <div style="margin: 0.1rem 2rem 0 1rem; width: 100%;">
            <h5 style="display: inline; margin-top: 12px;float: left;
                font-weight: 700;padding-left: 10px;">
                <a href="javascript:goBack()" style="color: white;"><i class="fa fa-arrow-left"></i></a> <span class="title">NỘP MINH CHỨNG</span>
            </h5>

            <img src="{{ asset('images/ocop.png') }}" alt="image" class="dark-logo" style="float: right" width="auto" height="50px">
        </div>
    </nav>
    <script>
        function goBack() {
            window.opener = self;
            window.close();
        }
    </script>
</header>