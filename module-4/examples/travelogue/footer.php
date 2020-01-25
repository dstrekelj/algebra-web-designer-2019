        <footer class="footer">
		    <div class="footer-menu">
		        <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu('footer');
                }
                ?>
		    </div>
		    <div class="copyright">
			    &copy; TRAVELOGUE, 2020 - <a class="footer-link" href="mailto:info@travelogue.example.com">info@travelogue.example.com</a>
			</div>
		</footer>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
