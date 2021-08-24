@extends('admin/layouts.app')
@section('content')
<div class="wrapper container-fluid">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="row fixed-bottom justify-content-center">
                <a href="" class="btn btn-primary">เพิ่มข้อมูล</a>
            </div>
        </div>
        <div class="row table-margin table-responsive">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">รูป</th>
                        <th scope="col">ชื่อ</th>
                        <th scope="col">สรรพคุณ</th>
                        <th scope="col" class="text-center">แก้ไข</th>
                        <th scope="col" class="text-center">ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><img src="{{ asset('img/tippy.jpg') }}"></td>
                        <td>ว่านหางจระเข้</td>
                        <td>ไม้ล้มลุกใบใหญ่หนาที่ทุกคนรู้จักกันดี
                            แม้ถิ่นกำเนิดจะอยู่ไกลถึงฝั่งเมดิเตอร์ เรเนียน และแอฟริกา
                            แต่ในประเทศไทยก็มีการปลูกว่านหางจระเข้อย่างแพร่หลาย
                            ซึ่งในตำรับยาไทยก็ใช้ว่านหางจระเข้บำบัดอาการต่าง ๆ ได้มากมาย
                            จนเป็นที่รู้จักว่า เป็นพืชอัศจรรย์ที่มีสรรพคุณสารพัดประโยชน์ โดย “วุ้นในใบสด”
                            สามารถนำมาบรรเทาอาการปวดศีรษะได้</td>
                        <td class="text-center">
                            <a href="#">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAB90lEQVRoge3Yu2oUURjA8d8sksLSJ7ATUV9AIoIQsLD0kkLfwAcQvHUmqWy8gaZNrRYWXl5A8Bm0MGmsgoKI0bWYmcxxdzaZ3T1zMc4fPnaYD875/vvNOcwcusM5vMdvbOMVTrRa0QwsYwfDkdjG8RbrmoqL+GlcIo/n7ZVWnUsKifv4aFzka2vVVSSUuJvdO2pcptMilxUSd0ZyozIvmy2tOntJwAAbWf4bTjZXWnWuKCRul+QHWM/y37HUXGnVCddEWScSPM7yP3Bh2gkWsIYtk7fAWWNd+i+HnbhVUsMAzxSdOI/DeLfP+JtYzRys1iAQSizXJBHGisxqiNMlk8xLKHFzgsTTEYlpWFR0ZtcqNuHuVLawEzwyx5rI2K2/DpEqEg/NL0GNIqFE2ZqIKUFNIk1LUINIGxJEFjmr+J64UZJP8MTsu9NeRBXJt9CNklydEkQWyd9Wd3A1uJ/ggfiPU0g0kWPBGLnMNc1IEFHkur9FcpnX6nucQqKJvDAukkednciJIjKQnnSExf/CB+mL3Km5y9yfIYaHIgz0CUfwJou3+BJh3KlIFN1Imp48EkPSR+NA0It0jV6ka/QiXaMX6Rq9SNc4UCJb2fVim4XMyJnsd5P0u6GOQ+wm4x7pkfyK4jD7X4rPmcTChI719PT09PT8X/wBlhtysZHvJdgAAAAASUVORK5CYII=" />
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="#">
                                <img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAACXUlEQVRoge2Yv2tTURTHP/fd+F9UyNwOjk62FZwcLRXUkGIVR8HB1hiDQlptcXWppkjrj4AVVwdbiNVRxziIQwZXBbuJufc6RJMXY9N38076WnifKdx3cs73y/1xLhdSUlIONUoymRvnDo7be1RcVtvckKopZiCS+E5VMRORDLirJ0+DWwFGJIpG4CvWXVEP3r7eKzCIlm9fxQOMoNRKlMCIBvZVfAvF0ShhUQ0cWLw2sTuBG5aQMOpddF2HfgZSA0mTGkia1EDSiBpw2VGRGB/EDJh8ieajj9hT53eNsRNTNB9+wFxelCpLRiKJyZewM6XW7/lVAILN510xdmIKU3wCOoM9dx0AXSnGrh17Blx2DJsrhDJqzFwFOzndHrKT023x7bGz13DZsbjl48+AatTRCznMracdgTqDKa5D5gj8+om5udYlHmvQy5dQjXrc8nKXOTt+ptsEgLWAg0CHxgx6aZZgq7q7qCQuc8H2K/RCDkwzNBh4i/euK5aJkAlrej86Ky4ehtHIVJ/Z7/dtQEQNtI/K8LL5iwow86t9+8QgiBkIn/OdQdu9nAItbkLEwP/FG/TSRXT5wj8bW9aESCPrEW+a6MU8wVa1tbHvzvSamKuINLLYBlSjjn4cepD706SC2kanSG2j54jVz+6JNDKRJRRU77fuNX3O+XCf0OtlgrWyRGnZZxWXHUU1PvXPESHGpxOn70JJkxpIGl8DO0NR0c0Pn2A/A45Nr/jBeOMT7DsDBeCb5398+I6msHdYBy8D6j2faXIMxwtkl9MO8BLNcVXji2DelJSUg85vwU3YNL7U328AAAAASUVORK5CYII=" />
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>












@endsection