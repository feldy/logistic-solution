<form action="system/login.php" method="post">
	<div class="easyui-panel" title="Login" style="width:340px; text-align: center;">
	    <div style="padding:10px 30px 20px 30px">
		    <!-- <form method="post" action=""> -->
		        <table cellpadding="3">
		            <tr>
		                <td>Username</td>
		                <td>:
		                	<input class="easyui-textbox" type="text" id="username" name="username"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Password</td>
		                <td>:
		                	<input type="password"  class="easyui-textbox" type="text" id="password" name="password"></input>
		                </td>
		            </tr>
		            <tr>
		                <td></td>
		                <td>
			    			<button class="easyui-linkbutton" type="submit" name="login">Login</button>
		                	<button class="easyui-linkbutton" type="reset" >Clear</button>
		                </td>
		            </tr>
		        </table>
			    <div style="text-align:center;padding:5px">
			    	
			    </div>
	    </div>
	</div>
</form>