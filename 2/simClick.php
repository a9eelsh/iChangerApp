<head>
	<script type="text/javascript">
		function simClickMain() {
        var link1 = document.getElementById('simClickElement');
        if (link1.click) {
            link1.click();
        }
        // For Safari on Mac OS. Also works with Chrome, and Firefox but not IE.
        else if (document.createEvent) {
            var event = document.createEvent("MouseEvent");
            event.initEvent("click", true, true);
            link1.dispatchEvent(event);
        }
    }
	</script>
</head>
<body onload="simClickMain()">
    <a id="simClickElement" href="javascript:alert('hello world!')">ENABLE JAVASCRIPT</a>
</body>