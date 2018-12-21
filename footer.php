		<hr>

		<footer class="footer center">
			<?php echo date('Y'); ?> &copy; / Proudly powered by <a href="//anchorcms.com" target="_blank">Anchor</a>
		
		</footer>    	
		
		</div>

		<div class="sidebar-parent">
			<div class="sidebar-btn">
				<i class="fas fa-bars"></i>
			</div>

			<div class="sidebar">
				
				<ul>
					<?php while(menu_items()): { ?>
						<li class="sidebar-entry">
							<a class="site-menu__item-link" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
								<?php echo menu_name(); ?>
							</a>
						</li>
					<?php } endwhile; ?>
				</ul>

				<div class="close-btn-inbar">
					<i class="fas fa-times"></i>
				</div>

			</div>
		</div>

	</body>
</html>