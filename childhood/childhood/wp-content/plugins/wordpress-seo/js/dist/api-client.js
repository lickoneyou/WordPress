!function(t,e){window.wpseoApi={get:function(t,e,n,o){this.request("GET",t,e,n,o)},post:function(t,e,n,o){this.request("POST",t,e,n,o)},put:function(t,e,n,o){this.request("PUT",t,e,n,o)},patch:function(t,e,n,o){this.request("PATCH",t,e,n,o)},delete:function(t,e,n,o){this.request("DELETE",t,e,n,o)},request:function(n,o,i,u,s){"function"==typeof i&&void 0===s&&(s=u,u=i,i={}),"POST"!==n&&"GET"!==n&&(i._method=n,n="POST"),t.ajax({url:e.root+"yoast/v1/"+o,method:n,beforeSend:function(t){t.setRequestHeader("X-WP-Nonce",e.nonce)},data:i}).done(u).fail(s)}}}(jQuery,wpApiSettings);