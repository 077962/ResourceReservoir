<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'RR: Hackathon 2013');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1>
				<?php			
					//echo $this->Html->image('NTTAMSTitleLogo.png', array('alt' => $cakeDescription, 'border' => '0'));
					if($this->Session->read('UserData')) {	
						echo '&nbsp;<div style="float:right;">';
						echo $this->Html->link($cakeDescription, '/users'); echo '&nbsp; &nbsp; &nbsp;';
						$userData = $this->Session->read('UserData');
						$firstName = $userData[0]['User']['first_name'];
						$lastName = $userData[0]['User']['last_name'];
						echo '<b>Welcome</b> '.$lastName.','.$firstName.'&nbsp;&nbsp;&nbsp;';
						echo $this->Html->link('logout', '/userinfos/logout');
						echo '</div>';
					}
					else
					{
						echo '&nbsp;<div style="float:right;">'.$this->Html->link($cakeDescription, '/').'</div>'; echo '&nbsp; &nbsp; &nbsp;';
					}					
				?>
			</h1>
		</div>		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
