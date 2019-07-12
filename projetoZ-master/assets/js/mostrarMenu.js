function exibirTopo()
{
	// jQuery(function () 
	// {
	// 	jQuery(window).scroll(function () 
	// 	{
	// 		if (jQuery(this).scrollTop() > 666) 
	// 		{
	// 			$("#menuTopo").addClass("menuDiferente");
	// 		} 
	// 		else 
	// 		{
	// 			$("#menuTopo").removeClass("menuDiferente");
	// 		}
	// 	});
	// });
	jQuery(function () 
	{
		jQuery(window).scroll(function () 
		{
			if (jQuery(this).scrollTop() > 660) 
			{
				$("#menuTopo").css('background-color', '#05C4E1');
				$("#img").css('display', 'block');
			} 
			else if(jQuery(this).scrollTop() < 660 && jQuery(this).scrollTop() > 60)
			{
				$("#menuTopo").css('background-color', 'rgba(5,196,225,0.6)');

				if(jQuery(this).scrollTop() > 333)
				{
					$("#img").css('display', 'block');
				}
				else
				{
					$("#img").css('display', 'none');
				}
			}
			else
			{
				$("#menuTopo").css('background-color', 'rgba(5,196,225,0.0)');
				$("#img").css('display', 'none');
			}
		});
	});
}