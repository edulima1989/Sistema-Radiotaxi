/**
 * @author Daniel Pardo Ligorred.
 * @license D-FRAMEWORK @ www.programacionj2ee.com
 * @version 0.2
 * @copyright 2011 @ D FRAMEWORK by Daniel Pardo Ligorred is licensed under a
 *            Creative Commons Reconocimiento-NoComercial-CompartirIgual 3.0
 *            Unported License.
 * 
 * @desc Libreria para movimiento de elementos javascript.
 */

// ELEMENTS.
$this = null;
$el = null;

// ABLE/DISABLE TO MOVE.
$move = false;

// LIMITS TO PARENT.
$toplimit = 0;
$bottomlimit = 0;
$leftlimit = 0;
rightlimit = 0;

// ON READY ENGINE.
$(document).ready(function() {

	function setLimits() {
		$el = $this.closest('.movelimit');
		if ($el.html() != null) {
			var offset = $el.offset();
			$leftlimit = offset.left;
			$toplimit = offset.top;
			$rightlimit = $leftlimit + $el.width();
			$bottomlimit = $toplimit + $el.height();
		}
	}

	$('.moveme').click(function() {
		if ($move) {
			$move = false;
		} else {
			$this = $(this);
			setLimits();
			$move = true;
		}

		updateValues();
	});

	$(window).mousemove(function(event) {
		if ($move) {
			var offset = $this.offset();

			if ($el.html() != null) {
				if ($toplimit > event.pageY - ($this.height() / 2))
					exit();
				if ($bottomlimit < event.pageY + ($this.height() / 2))
					exit();
				if ($leftlimit > event.pageX - ($this.width() / 2))
					exit();
				if ($rightlimit < event.pageX + ($this.width() / 2))
					exit();
			}

			$this.offset({
				top : event.pageY - ($this.height() / 2),
				left : event.pageX - ($this.width() / 2)
			});
		}
	});
});