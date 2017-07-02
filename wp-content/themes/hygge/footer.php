	<footer id="footer" class="background-bar">
		<div class="wrapper">
			<div class="widgets">
				<div class="column">
					<h4>Hygge Foundation</h4>
					<?php dynamic_sidebar('Sidebar 2', array('class' => 'hygge-text')); ?>
				</div>
				<div class="column">
					<h4>Facebook</h4>
					<?php dynamic_sidebar('Sidebar 3'); ?>
				</div>
				<div class="column">
					<h4>Instagram</h4>
					<?php dynamic_sidebar('Sidebar 4'); ?>
				</div>
			</div>
		</div>
		<div class="bottom-bar">
			<div class="wrapper">
				<p class="sentence inline">All rights reserved &copy; 2016</p>
				<p class="sentence inline alignright"><a href="#header" class="hygge-up">Hygge Style &diams;</a></p>
			</div>
		</div>
	</footer>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url')?>/js/app.js" type="text/javascript"></script>
</body>
</html>