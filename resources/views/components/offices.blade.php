@props(['invert' => false])

<ul role="list" {{ $attributes }}>
    <li>
        <x-office name="Copenhagen" :invert="$invert">
            1 Carlsberg Gate
            <br />
            1260, København, Denmark
        </x-office>
    </li>
    <li>
        <x-office name="Billund" :invert="$invert">
            24 Lego Allé
            <br />
            7190, Billund, Denmark
        </x-office>
    </li>
</ul>

