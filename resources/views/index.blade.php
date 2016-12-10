@extends ('layouts.app')
@section('content')
    <div class="title">
        <h1>Vpliv avtomatskih procesov na odločitve potrošnikov</h1> 
    </div>
    <div class="addressing">
        <p>
            Do you think your choices can be influenced? When it comes to setting of purchase, we are constantly influenced with the intention of changing the course of our decisions towards a certain product. According with up-to date findings, this research will try to explore our unconscious guidance systems, which can direct our behavior without our awareness. 
            My name is Urh Meža and I am a psychology student at University of Ljubljana (Slovenia).  I would like to inform you that your participation is voluntary and all information is confidential and will only be viewed by researchers. Only aggregated data will be reported in possible publications, meaning that your identity will always remain confidential. 
            If you wish to take part in the research, please check the box “I agree” and continue with the study. By doing that you agree to the following:
            <ol>
                <li> I have read the above information, and I understand the nature and purpose of this research. </li>
                <li> I understand that my participation is voluntary and that I may withdraw any time. </li>
                <li> I understand that results of this study will be treated in confidential manner. </li>
                <li> I understand that the results will be reported only in summary form and I will not be identified individually. </li>
                <li> In case of additional questions please contact me at urh.meza@gmail.com. </li>
            </ol>
            <br />
            <form id="agree-form" method="post" action="iagree">
                {{ csrf_field() }}
                <div>
                    <input type="checkbox" id="agree-box" required="required">I agree.
                    <button type="submit" id="send-btn">Continue</button>
                </div>
            </form>
        </p>
    </div>
@endsection
