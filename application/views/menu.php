<table class="table">
	<tr>
		<td>
			<?php if($content == 'bingo/landing_page') { echo '>>'; } ?>
			<a href="/Nieske/index.php/bingo/">Home</a>
		</td>
		<td>
			<?php if($content == 'bingo/subscribe') { echo '>>'; } ?>
			<a href="/Nieske/index.php/bingo/subscribe/">Inschrijven</a>
		</td>
		<?php if($is_admin): ?>
			<td>
				<?php if($content == 'bingo/subscribe') { echo '>>'; } ?>
				<a href="/Nieske/index.php/bingo/subscribe/">Admin panel</a>
			</td>
		<?php endif; ?>
	</tr>
</table>