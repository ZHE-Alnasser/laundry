@php

    $changes= "<div class='md:flex text-xs md:text-base'>";
        foreach (json_decode($properties) as $key => $value) {

            $changes .= '<div class="flex flex-col f">';
            $changes .= '<div class="text-blue-500 text-sm">' . __($key) . '</div><br>';
            foreach ($value as $k => $val) {
                if ($k == 'updated_at') continue;
                $value = $k == 'password' ? '******' : $val;
                $changes .= '<div><span class="font-bold">' . __('validation.attributes.'.$k) . ': </span>' . $value . '<br></div>';
            }
    $changes .='</div>';
        }
    $changes .='</div>';
    echo $changes;
@endphp
