jQuery((function(e){null!=document.getElementById("unify_iframe")&&e("#unify_iframe").nextAll().remove(),jQuery("#buy_now_button").click((function(){var t=e(this).val(),o=e("input[name=quantity]").val();jQuery.ajax({url:clearCart.ajaxurl,type:"post",data:{action:"clearcart",product_id:t,product_qty:o},success:function(e){console.log(e)},error:function(e){console.log("error")},complete:function(e){console.log("completd")}}),jQuery("#is_buy_now").val("1"),jQuery("form.cart").submit()}))})),iFrameResize({log:!1,heightCalculationMethod:"lowestElement"},"#unify_iframe");