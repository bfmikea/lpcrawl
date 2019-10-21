<!-- footer-start -->
<footer>
	<div class="px-3 pt-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-4 col-md-2 pb-4">
					<ul>
						<li><a class="js-scroll-trigger" href="<?php the_field( 'urlitem1footer' ); ?>"><?php the_field( 'item1footer' ); ?></a></li>
						<li><a class="js-scroll-trigger" href="<?php the_field( 'urlitem2footer' ); ?>"><?php the_field( 'item2footer' ); ?></a></li>
						<li><a class="js-scroll-trigger" href="<?php the_field( 'urlitem3footer' ); ?>"><?php the_field( 'item3footer' ); ?></a></li>
					</ul>
				</div>
				<div class="col-8 col-md-4 pb-4">
					<ul>
						<li><a class="js-scroll-trigger" href="<?php the_field( 'urlitem4footer' ); ?>"><?php the_field( 'item4footer' ); ?></a></li>
						<li><a class="js-scroll-trigger" data-toggle="modal" data-target="#reservaModal" href="<?php the_field( 'urlitem5footer' ); ?>"><?php the_field( 'item5footer' ); ?></a></li>
						<li><a class="js-scroll-trigger" href="<?php the_field( 'urlitem6footer' ); ?>"><?php the_field( 'item6footer' ); ?></a></li>
					</ul>
				</div>
				<div class="col-12 col-md-6 d-flex align-items-center justify-content-start justify-content-lg-end pb-4">
				<?php the_field( 'item7footer' ); ?>
					<a class="icosociales" href=""><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
					<a class="icosociales" href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
					<a class="icosociales" href=""><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>

	</div>
</footer>
<!-- footer-end -->

 

<?php 
// wp_footer action hook
	wp_footer(); 
?>


</body>


<!-- ModalReservarEspañol -->
<div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <?php echo do_shortcode( '[bookly-form category_id="0" service_id="1" staff_member_id="1" hide="categories,time_range"]' ); ?>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<!-- EndModalReservarEspañol -->

<!-- ModalReservarIngles -->
<div class="modal fade" id="modalReservarIN" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                    <h5>Book Free Tour Glasgow</h5>
                    
                </div>
                <div class="modal-body">
				
				<div style="width: 100%; text-align: left;">
					<iframe src="https://eventbrite.co.uk/tickets-external?eid=50292551375&ref=etckt" frameborder="0" height="275" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true">
					</iframe>

					<div style="font-family:Helvetica, Arial; font-size:12px; padding:10px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #ADB0B6; text-decoration: none;" target="_blank" href="https://www.eventbrite.co.uk/">Powered by Eventbrite</a>
					</div>
				</div>
 
			</div>

                </div>
            </div>
        </div>
<!-- EndModalReservarIngles -->

</div>
</html>
