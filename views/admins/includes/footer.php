</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright <?= date('Y') ?> - Hệ thống độc quyền của công ty</span>
    </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn đăng xuất khỏi hệ thống ?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Hãy nhấn vào nút "Đăng xuất" bên dưới để thoát khỏi hệ thống</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
    <a class="btn btn-primary" onclick="logout()" href="javascript:void(0)">Đăng xuất</a>
</div>
</div>
</div>
</div>
<!-- Profile Modal-->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Thông tin cá nhân</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body" id="profile"></div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="./public/admin/vendor/jquery/jquery.min.js"></script>
<script src="./public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="./public/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="./public/admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="./public/admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="./public/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Script -->
<script src="./public/admin/js/auth.js"></script>
<script src="./public/admin/js/staff.js"></script>
<script src="./public/admin/js/browser.js"></script>
<script src="./public/admin/js/ot.js"></script>
<script src="./public/admin/js/wfh.js"></script>
<script src="./public/admin/js/checkin-checkout.js"></script>
<script src="./public/admin/js/off.js"></script>
<script src="./public/admin/js/article.js"></script>
<script src="./public/admin/js/permission.js"></script>
<script src="./public/admin/js/profile.js"></script>
</body>

</html>