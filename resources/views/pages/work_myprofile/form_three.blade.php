<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Myprofile Edit 3') }}
    </h2>
  </x-slot>
    
<form id="Form" action="" method="POST">
    @csrf
    <input type="hidden" name="work_myprofile_detail_id" value="{{ $work_myprofile_detail->id ?? ''}}">
    <h2>私のエピソード</h2>
    <select class="form-select" name="episode_kinds">
        @if($data['episode_kinds'] ?? false)
            <option value="">選択してください</option>
            <option value="過去にこんな大失敗をしました！"{{ old('episode_kinds', $data['episode_kinds'] ?? '') == '過去にこんな大失敗をしました！' ? 'selected' : '' }}>過去にこんな大失敗をしました！</option>  
            <option value="過去にこんな大成功をしました！" {{ old('episode_kinds', $data['episode_kinds'] ?? '') == '過去にこんな大成功をしました！' ? 'selected' : '' }}>過去にこんな大成功をしました！</option>
            <option value="実はこんな経験があります！" {{ old('episode_kinds', $data['episode_kinds'] ?? '') == '実はこんな経験があります！' ? 'selected' : '' }}>実はこんな経験があります！</option>
            <option value="実はこんな夢を持っています！" {{ old('episode_kinds', $data['episode_kinds'] ?? '') == '実はこんな夢を持っています！' ? 'selected' : '' }}>実はこんな夢を持っています！</option>
            <option value="実はこんなことに興味があります！" {{ old('episode_kinds', $data['episode_kinds'] ?? '') == '実はこんなことに興味があります！' ? 'selected' : '' }}>実はこんなことに興味があります！</option>
            <option value="実はこんな特技があります！" {{ old('episode_kinds', $data['episode_kinds'] ?? '') == '実はこんな特技があります！' ? 'selected' : '' }}>実はこんな特技があります！</option>

        @else
            <option value="">選択してください</option>
            <option value="過去にこんな大失敗をしました！"{{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '過去にこんな大失敗をしました！' ? 'selected' : '' }}>過去にこんな大失敗をしました！</option>  
            <option value="過去にこんな大成功をしました！" {{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '過去にこんな大成功をしました！' ? 'selected' : '' }}>過去にこんな大成功をしました！</option>
            <option value="実はこんな経験があります！" {{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '実はこんな経験があります！' ? 'selected' : '' }}>実はこんな経験があります！</option>
            <option value="実はこんな夢を持っています！" {{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '実はこんな夢を持っています！' ? 'selected' : '' }}>実はこんな夢を持っています！</option>
            <option value="実はこんなことに興味があります！" {{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '実はこんなことに興味があります！' ? 'selected' : '' }}>実はこんなことに興味があります！</option>
            <option value="実はこんな特技があります！" {{ old('episode_kinds', $work_myprofile_detail->episode_kinds ?? '') == '実はこんな特技があります！' ? 'selected' : '' }}>実はこんな特技があります！</option>
        @endif
    </select>

        <div>
        <label for="episode">エピソード</label>
        <input type="text" id="episode" name="episode" value="{{ old('episode', $data['episode'] ?? $work_myprofile_detail->episode ?? '') }}">
    </div>

    <h2>私のモチベーション</h2>
    <div class="form-group row">
    @if($data['motivation'] ?? false)
        <div class="col-lg-4 mb-4">
            <label for="" class="form-label">【 貢  献 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation01" value="【 貢  献 】 誰かの笑顔を見ること" @if(is_array(session()->get('data')['motivation']) && in_array("【 貢  献 】 誰かの笑顔を見ること", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation01">誰かの笑顔を見ること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation02" value="【 貢  献 】 誰かの役に立てること" @if(is_array(session()->get('data[motivation]')) && in_array("【 貢  献 】 誰かの役に立てること", session()->get('motivation'))) checked @endif><label class="form-check-label" for="motivation02">誰かの役に立てること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation03" value="【 貢  献 】 誰かを影で支えること" @if(is_array(session()->get('data')['motivation']) && in_array("【 貢  献 】 誰かを影で支えること", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation03">誰かを影で支えること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 スキル 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation04" value="【 スキル 】 知識やスキルが身に着くこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 スキル 】 知識やスキルが身に着くこと", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation04">知識やスキルが身に着くこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation05" value="【 スキル 】 答えや解決策を見つけ出すこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 スキル 】 答えや解決策を見つけ出すこと", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation05">答えや解決策を見つけ出すこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation06" value="【 スキル 】 何かを表現・創造すること" @if(is_array(session()->get('data')['motivation']) && in_array("【 スキル 】 何かを表現・創造すること", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation06">何かを表現・創造すること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 協 力 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation07" value="【 協 力 】 リーダーシップを発揮すること" @if(is_array(session()->get('data')['motivation']) && in_array("【 協 力 】 リーダーシップを発揮すること", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation07">リーダーシップを発揮すること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation08" value="【 協 力 】 みんなで協力して取り組むこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 協 力 】 みんなで協力して取り組むこと", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation08">みんなで協力して取り組むこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation09" value="【 協 力 】 チームをサポートすること" @if(is_array(session()->get('data')['motivation']) && in_array("【 協 力 】 チームをサポートすること", session()->get('data')['motivation'])) checked @endif><label class="form-check-label" for="motivation09">チームをサポートすること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 成 長 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation10" value="【 成 長 】 結果に向けて努力をすること" @if(is_array(session()->get('data')['motivation']) && in_array("【 成 長 】 結果に向けて努力をすること", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation10">結果に向けて努力をすること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation11" value="【 成 長 】 新たなチャレンジをすること" @if(is_array(session()->get('data')['motivation']) && in_array("【 成 長 】 新たなチャレンジをすること", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation11">新たなチャレンジをすること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation12" value="【 成 長 】 最後までやり抜くこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 成 長 】 最後までやり抜くこと", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation12">最後までやり抜くこと</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 競 争 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation13" value="【 競 争 】 売上や顧客を増やすこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 競 争 】 売上や顧客を増やすこと", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation13">売上や顧客を増やすこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation14" value="【 競 争 】 ライバルに打ち勝つこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 競 争 】 ライバルに打ち勝つこと", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation14">ライバルに打ち勝つこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation15" value="【 競 争 】 駆け引きや交渉すること" @if(is_array(session()->get('data')['motivation']) && in_array("【 競 争 】 ライバルに打ち勝つこと", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation15">駆け引きや交渉すること</label></div>
        </div>
        <label for="" class="form-label">【 獲 得 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation16" value="【 獲 得 】 何かを手に入れること" @if(is_array(session()->get('data')['motivation']) && in_array("【 獲 得 】 何かを手に入れること", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation16">何かを手に入れること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation17" value="【 獲 得 】 地位や年収が上がること" @if(is_array(session()->get('data')['motivation']) && in_array("【 獲 得 】 地位や年収が上がること", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation17">地位や年収が上がること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation18" value="【 獲 得 】 新たな人間関係を築くこと" @if(is_array(session()->get('data')['motivation']) && in_array("【 獲 得 】 新たな人間関係を築くこと", session()->get('data')['motivation'])) checked @endif>><label class="form-check-label" for="motivation18">新たな人間関係を築くこと</label></div>
        </div>
    @else
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 貢  献 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation01" value="【 貢  献 】 誰かの笑顔を見ること"@if($work_myprofile_detail->motivation_1 == "【 貢  献 】 誰かの笑顔を見ること" || $work_myprofile_detail->motivation_2 == "【 貢  献 】 誰かの笑顔を見ること" || $work_myprofile_detail->motivation_3 == "【 貢  献 】 誰かの笑顔を見ること") checked @endif><label class="form-check-label" for="motivation01">誰かの笑顔を見ること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation02" value="【 貢  献 】 誰かの役に立てること"@if($work_myprofile_detail->motivation_1 == "【 貢  献 】 誰かの役に立てること" || $work_myprofile_detail->motivation_2 == "【 貢  献 】 誰かの役に立てること" || $work_myprofile_detail->motivation_3 == "【 貢  献 】 誰かの役に立てること") checked @endif><label class="form-check-label" for="motivation02">誰かの役に立てること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation03" value="【 貢  献 】 誰かを影で支えること"@if($work_myprofile_detail->motivation_1 == "【 貢  献 】 誰かを影で支えること" || $work_myprofile_detail->motivation_2 == "【 貢  献 】 誰かを影で支えること" || $work_myprofile_detail->motivation_3 == "【 貢  献 】 誰かを影で支えること") checked @endif>
            <label class="form-check-label" for="motivation03">誰かを影で支えること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
            <label for="" class="form-label">【 スキル 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation04" value="【 スキル 】 知識やスキルが身に着くこと" @if($work_myprofile_detail->motivation_1 == "【 スキル 】 知識やスキルが身に着くこと" || $work_myprofile_detail->motivation_2 == "【 スキル 】 知識やスキルが身に着くこと" || $work_myprofile_detail->motivation_3 == "【 スキル 】 知識やスキルが身に着くこと") checked @endif><label class="form-check-label" for="motivation04">知識やスキルが身に着くこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation05" value="【 スキル 】 答えや解決策を見つけ出すこと" @if($work_myprofile_detail->motivation_1 == "【 スキル 】 答えや解決策を見つけ出すこと" || $work_myprofile_detail->motivation_2 == "【 スキル 】 答えや解決策を見つけ出すこと" || $work_myprofile_detail->motivation_3 == "【 スキル 】 答えや解決策を見つけ出すこと") checked @endif><label class="form-check-label" for="motivation05">答えや解決策を見つけ出すこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation06" value="【 スキル 】 何かを表現・創造すること" @if($work_myprofile_detail->motivation_1 == "【 スキル 】 何かを表現・創造すること" || $work_myprofile_detail->motivation_2 == "【 スキル 】 何かを表現・創造すること" || $work_myprofile_detail->motivation_3 == "【 スキル 】 何かを表現・創造すること") checked @endif><label class="form-check-label" for="motivation06">何かを表現・創造すること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
            <label for="" class="form-label">【 協 力 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation07" value="【 協 力 】 リーダーシップを発揮すること" @if($work_myprofile_detail->motivation_1 == "【 協 力 】 リーダーシップを発揮すること" || $work_myprofile_detail->motivation_2 == "【 協 力 】 リーダーシップを発揮すること" || $work_myprofile_detail->motivation_3 == "【 協 力 】 リーダーシップを発揮すること") checked @endif><label class="form-check-label" for="motivation07">リーダーシップを発揮すること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation08" value="【 協 力 】 みんなで協力して取り組むこと" @if($work_myprofile_detail->motivation_1 == "【 協 力 】 みんなで協力して取り組むこと" || $work_myprofile_detail->motivation_2 == "【 協 力 】 みんなで協力して取り組むこと" || $work_myprofile_detail->motivation_3 == "【 協 力 】 みんなで協力して取り組むこと") checked @endif><label class="form-check-label" for="motivation08">みんなで協力して取り組むこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation09" value="【 協 力 】 チームをサポートすること" @if($work_myprofile_detail->motivation_1 == "【 協 力 】 チームをサポートすること" || $work_myprofile_detail->motivation_2 == "【 協 力 】 チームをサポートすること" || $work_myprofile_detail->motivation_3 == "【 協 力 】 チームをサポートすること") checked @endif><label class="form-check-label" for="motivation09">チームをサポートすること</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 成 長 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation10" value="【 成 長 】 結果に向けて努力をすること" @if($work_myprofile_detail->motivation_1 == "【 成 長 】 結果に向けて努力をすること" || $work_myprofile_detail->motivation_2 == "【 成 長 】 結果に向けて努力をすること" || $work_myprofile_detail->motivation_3 == "【 成 長 】 結果に向けて努力をすること") checked @endif><label class="form-check-label" for="motivation10">結果に向けて努力をすること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation11" value="【 成 長 】 新たなチャレンジをすること" @if($work_myprofile_detail->motivation_1 == "【 成 長 】 新たなチャレンジをすること" || $work_myprofile_detail->motivation_2 == "【 成 長 】 新たなチャレンジをすること" || $work_myprofile_detail->motivation_3 == "【 成 長 】 新たなチャレンジをすること") checked @endif><label class="form-check-label" for="motivation11">新たなチャレンジをすること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation12" value="【 成 長 】 最後までやり抜くこと" @if($work_myprofile_detail->motivation_1 == "【 成 長 】 最後までやり抜くこと" || $work_myprofile_detail->motivation_2 == "【 成 長 】 最後までやり抜くこと" || $work_myprofile_detail->motivation_3 == "【 成 長 】 最後までやり抜くこと") checked @endif><label class="form-check-label" for="motivation12">最後までやり抜くこと</label></div>
        </div>
        <div class="col-lg-4 mb-4">
        <label for="" class="form-label">【 競 争 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation13" value="【 競 争 】 売上や顧客を増やすこと" @if($work_myprofile_detail->motivation_1 == "【 競 争 】 売上や顧客を増やすこと" || $work_myprofile_detail->motivation_2 == "【 競 争 】 売上や顧客を増やすこと" || $work_myprofile_detail->motivation_3 == "【 競 争 】 売上や顧客を増やすこと") checked @endif><label class="form-check-label" for="motivation13">売上や顧客を増やすこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation14" value="【 競 争 】 ライバルに打ち勝つこと" @if($work_myprofile_detail->motivation_1 == "【 競 争 】 ライバルに打ち勝つこと" || $work_myprofile_detail->motivation_2 == "【 競 争 】 ライバルに打ち勝つこと" || $work_myprofile_detail->motivation_3 == "【 競 争 】 ライバルに打ち勝つこと") checked @endif><label class="form-check-label" for="motivation14">ライバルに打ち勝つこと</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation15" value="【 競 争 】 駆け引きや交渉すること" @if($work_myprofile_detail->motivation_1 == "【 競 争 】 駆け引きや交渉すること" || $work_myprofile_detail->motivation_2 == "【 競 争 】 駆け引きや交渉すること" || $work_myprofile_detail->motivation_3 == "【 競 争 】 駆け引きや交渉すること") checked @endif><label class="form-check-label" for="motivation15">駆け引きや交渉すること</label></div>
        </div>
        <label for="" class="form-label">【 獲 得 】</label>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation16" value="【 獲 得 】 何かを手に入れること" @if($work_myprofile_detail->motivation_1 == "【 獲 得 】 何かを手に入れること" || $work_myprofile_detail->motivation_2 == "【 獲 得 】 何かを手に入れること" || $work_myprofile_detail->motivation_3 == "【 獲 得 】 何かを手に入れること") checked @endif><label class="form-check-label" for="motivation16">何かを手に入れること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation17" value="【 獲 得 】 地位や年収が上がること" @if($work_myprofile_detail->motivation_1 == "【 獲 得 】 地位や年収が上がること" || $work_myprofile_detail->motivation_2 == "【 獲 得 】 地位や年収が上がること" || $work_myprofile_detail->motivation_3 == "【 獲 得 】 地位や年収が上がること") checked @endif><label class="form-check-label" for="motivation17">地位や年収が上がること</label></div>
            <div class="form-check"><input type="checkbox" name="motivation[]" id="motivation18" value="【 獲 得 】 新たな人間関係を築くこと" @if($work_myprofile_detail->motivation_1 == "【 獲 得 】 新たな人間関係を築くこと" || $work_myprofile_detail->motivation_2 == "【 獲 得 】 新たな人間関係を築くこと" || $work_myprofile_detail->motivation_3 == "【 獲 得 】 新たな人間関係を築くこと") checked @endif><label class="form-check-label" for="motivation18">新たな人間関係を築くこと</label></div>
        </div>
    @endif
    </div>

    <h2>私のキャッチコピーをひとことで</h2>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <input type="text"  name="catchcopy" id="catchcopy" class="form-control" value="{{ old('catchcopy', $data['catchcopy'] ?? $work_myprofile_detail->catchcopy ?? '') }}" placeholder="私のキャッチコピーをひとことで">
        </div>
    <div>
        <button type="submit" id="backButton">Back</button>
        <button type="submit" id="nextButton">Next</button>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#backButton").click(function() {
            $("#Form").attr("action", "{{ route('work_myprofile.form_two') }}");
        });

        $("#nextButton").click(function() {
            $("#Form").attr("action", "{{ route('work_myprofile.store') }}");
        });
    });
</script>
</x-app-layout>
