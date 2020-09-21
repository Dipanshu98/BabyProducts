<style type="text/css">
	.strike {
    display: block;
    text-align: center;
    overflow: hidden;
    white-space: nowrap; 
	}

	.strike > span {
    position: relative;
    display: inline-block;
	}

	.strike > span:before,
	.strike > span:after {
    content: "";
    position: absolute;
    top: 50%;
    width: 100%;
    height: 1px;
    background: black;
	}

	.strike > span:before {
    right: 100%;
    margin-right: 15px;
    background: linear-gradient(to right, transparent , black);
	}

	.strike > span:after {
    left: 100%;
    margin-left: 15px;
    background: linear-gradient(to right, black , transparent);
	}

	span{
		font-family: tahoma;
		font-size: 20px;
	}
</style>

<div class="strike" style="padding-top: 30px;">
   <span><strong>Sleepwear</strong></span>
</div>