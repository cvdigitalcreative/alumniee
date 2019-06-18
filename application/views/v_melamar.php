<style type="text/css">
  
.btn-primary{
  color: black;
  background-color: #007bff;
  border-color: #007bff;
}

.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
    width: 100%
}

</style>

<div class="container">
  <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                Hello world!
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer"><button type="button" class="btn btn-primary">OK</button></div>
        </div>
    </div>
</div>

  <div class="row">
    <div class="col-lg-12 col-md-2 mt-4 order-2">
     <div class="tab-content" style="border-left: 4px solid #7fb4ed; border-top: 1px solid   #efefef">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <form method="" action="" >
          <div class="btn-block">
            <div class="fileUpload btn btn-info btn btn-block">
              <span>Upload</span>
              <input class="upload" type="file" />
            </div>
          </div>
      </div>
        <p style="margin-top: 30px;margin-bottom: 2px;"> <b> Quetions : </b></p>
        <p>Why do you want to work at company</p>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="form-group">
            <label for="comment">Answer:</label>
              <textarea class="form-control" rows="8" id="comment" required></textarea>
          </div>

            <div class="float-lg-right float-md-right float-sm-right mt-4">
                <div class="col-lg-3 col-md-3 col-sm-3">
                   <button type="submit" class="btn btn-success">Melamar</button>
                </div>          
            </div>
            </form>
          </div>
        </div>
      </div>
             
            
    </div>
  </div>
</div>
</div>

 <div class="modal" tabindex="-1" role="dialog" id="apply">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete a content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body p-20">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="kode" value="<"/> 
                                    <p>Apakah kamu yakin ingin melamar pekerjaan ini <b></b></p>
                                </div>
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success ripple save-category">Lamar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?= base_url()?>assets/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url()?>assets/js/popper.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url()?>assets/js/jquery.waypoints.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.stellar.min.js"></script>
<script src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/js/aos.js"></script>
<script src="<?= base_url()?>assets/js/jquery.animateNumber.min.js"></script>
<script src="<?= base_url()?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?= base_url()?>assets/js/jquery.timepicker.min.js"></script>
<script src="<?= base_url()?>assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?= base_url()?>assets/js/google-map.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>
<script src="<?= base_url()?>assets/js/bootbox.min.js"></script>
<script src="<?= base_url()?>assets/js/bootbox.js"></script>
<script src="<?= base_url()?>assets/js/bootbox.all.js"></script>

<script type="text/javascript">

 // $("#myModal").on("show", function() {    // wire up the OK button to dismiss the modal when shown
 //        $("#myModal a.btn").on("click", function(e) {
 //            console.log("button pressed");   // just as an example...
 //            $("#myModal").modal('hide');     // dismiss the dialog
 //        });
 //    });
        
 //    $("#myModal").on("hide", function() {    // remove the event listeners when the dialog is dismissed
 //        $("#myModal a.btn").off("click");
 //    });
            
 //    $("#apply").on("hidden", function() {  // remove the actual elements from the DOM when fully hidden
 //        $("#myModal").remove();
 //    });
            
 //    $("#myModal").modal({                    // wire up the actual modal functionality and show the dialog
 //        "backdrop"  : "static",
 //        "keyboard"  : true,
 //        "show"      : true                     // ensure the modal is shown immediately
 //    });

 function apply(){
        var konfirmasi = confirm("Silakan Klik Tombol Salah Satu Tombol");
        var text = "";
        
        if(konfirmasi === true) {
          text = "Kamu klik Tombol OK";
        }else{
          text = "Kamu klik Tombol Cancel";
        }
        
        document.getElementById("hasil").innerHTML = text;
      }
  

</script>
    
  </body>
</html>