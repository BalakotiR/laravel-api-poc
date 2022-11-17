<x-app-layout>
    <x-slot name="header">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

var xsrfToken = getCookie('XSRF-TOKEN');

console.log(xsrfToken);

         function getMessage() {
            $.ajax({
               type:'GET',
               url:'/dashboardCount',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in! + 1
                </div>
                <?php echo csrf_token(); ?>

            </div>

            <div id = 'msg'>This message will be replaced using Ajax.  Click the button to replace the message.</div>
        <?php echo Form::button('Replace Message',['onClick'=>'getMessage()']); ?>

        @foreach($cookies as $key => $value)
            <div><br>-----<br></div>
            <div><pre>{{ $key }}</pre></div>
            <div style="word-break:break-all">{{ $value }}</div>
        @endforeach

        </div>
    </div>
</x-app-layout>
