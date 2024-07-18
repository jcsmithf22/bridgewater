@props(['invert' => false, 'fillOnHover' => false])

<div class="flex flex-row items-center">
    <x-logo.logomark preserveAspectRatio="xMinYMid meet" invert="{{ $invert }}" class="hidden sm:block" />


    <svg viewBox="0 0 250 32" aria-hidden="true"
        {{ $attributes->merge(['class' => $fillOnHover ? 'group/logo -ml-8' : '-ml-8']) }}>
        <path class="{{ $invert ? 'fill-white' : 'fill-neutral-950' }}"
            d="M 44.649954,23.922516 V 5.8065159 h 10.444 q 3.64,0 5.516,1.232 1.904,1.204 1.904,3.6120001 0,1.54 -0.756,2.436 -0.756,0.868 -2.156,1.288 -1.372,0.42 -3.248,0.532 l 0.112,-0.196 q 1.372,0.028 2.576,0.196 1.232,0.168 2.156,0.616 0.924,0.448 1.456,1.26 0.532,0.784 0.532,2.072 0,1.68 -0.896,2.8 -0.896,1.092 -2.492,1.652 -1.596,0.56 -3.696,0.616 z m 3.724,-3.08 h 7.336 q 1.764,0 2.716,-0.56 0.952,-0.588 0.952,-1.848 0,-0.924 -0.56,-1.344 -0.56,-0.42 -1.484,-0.504 -0.924,-0.112 -1.988,-0.112 h -6.972 z m 0,-7.364 h 6.58 q 1.764,0 2.716,-0.504 0.952,-0.532 0.952,-1.792 0,-1.2600001 -0.952,-1.7640001 -0.952,-0.532 -2.52,-0.532 h -6.776 z m 16.140019,-3.472 h 3.64 v 13.916 h -3.64 z m 8.988,2.996 q -1.568,0 -2.716,0.616 -1.148,0.588 -1.848,1.456 -0.7,0.868 -0.98,1.68 l -0.028,-1.54 q 0.028,-0.336 0.224,-0.98 0.196,-0.672 0.588,-1.428 0.392,-0.784 1.036,-1.484 0.644,-0.728 1.568,-1.176 0.924,-0.4480001 2.156,-0.4480001 z m 4.911974,-9.1000001 v 3.192 h -4.228 v -3.192 z m -3.948,6.1040001 h 3.64 v 13.916 h -3.64 z m 12.55599,14.224 q -2.1,0 -3.808,-0.896 -1.68,-0.924 -2.66,-2.548 -0.98,-1.652 -0.98,-3.808 0,-2.212 0.952,-3.836 0.98,-1.624 2.66,-2.52 1.68,-0.9240001 3.836,-0.9240001 1.876,0 3.192,0.5600001 1.316,0.56 2.128,1.568 0.812,0.98 1.176,2.296 0.392,1.316 0.392,2.856 0,1.232 -0.392,2.52 -0.392,1.26 -1.204,2.352 -0.812,1.064 -2.128,1.736 -1.316,0.644 -3.164,0.644 z m 1.176,-2.8 q 1.652,0 2.856,-0.56 1.204,-0.56 1.848,-1.568 0.644,-1.008 0.644,-2.324 0,-1.428 -0.672,-2.408 -0.644,-1.008 -1.848,-1.54 -1.176,-0.532 -2.828,-0.532 -2.324,0 -3.612,1.232 -1.288,1.232 -1.288,3.248 0,1.344 0.616,2.352 0.616,0.98 1.708,1.54 1.12,0.56 2.576,0.56 z m 5.348,-17.0240001 h 3.64 V 23.922516 h -3.388 q -0.084,-0.644 -0.168,-1.652 -0.084,-1.036 -0.084,-1.932 z M 106.54996,21.794516 q -2.268,0 -4.004,-0.672 -1.708,-0.7 -2.659999,-2.044 -0.952,-1.344 -0.952,-3.248 0,-1.876 0.924,-3.248 0.923999,-1.372 2.631999,-2.128 1.736,-0.7560001 4.06,-0.7560001 0.644,0 1.232,0.084 0.616,0.084 1.204,0.2240001 l 7.028,0.028 v 2.744 q -1.428,0.028 -2.912,-0.336 -1.456,-0.392 -2.576,-0.84 l -0.084,-0.196 q 0.952,0.448 1.792,1.12 0.84,0.644 1.344,1.512 0.532,0.84 0.532,1.96 0,1.82 -0.924,3.136 -0.924,1.288 -2.632,1.988 -1.68,0.672 -4.004,0.672 z m 4.676,7.868 v -0.672 q 0,-1.288 -0.84,-1.792 -0.812,-0.504 -2.24,-0.504 h -4.34 q -1.26,0 -2.128,-0.196 -0.84,-0.196 -1.344,-0.56 -0.503999,-0.364 -0.727999,-0.868 -0.224,-0.476 -0.224,-1.036 0,-1.12 0.727999,-1.68 0.728,-0.588 1.96,-0.784 1.232,-0.196 2.716,-0.084 l 1.764,0.308 q -1.764,0.056 -2.632,0.308 -0.84,0.224 -0.84,0.924 0,0.42 0.336,0.672 0.336,0.224 0.952,0.224 h 4.564 q 1.876,0 3.192,0.392 1.344,0.42 2.044,1.372 0.7,0.98 0.7,2.66 v 1.316 z m -4.676,-10.5 q 1.204,0 2.1,-0.392 0.924,-0.392 1.428,-1.12 0.504,-0.756 0.504,-1.792 0,-1.064 -0.504,-1.82 -0.504,-0.756 -1.4,-1.148 -0.896,-0.42 -2.128,-0.42 -1.204,0 -2.128,0.42 -0.924,0.392 -1.428,1.148 -0.504,0.756 -0.504,1.82 0,1.036 0.504,1.792 0.504,0.728 1.4,1.12 0.924,0.392 2.156,0.392 z m 22.77597,0.14 h 3.528 q -0.224,1.428 -1.204,2.548 -0.952,1.12 -2.604,1.764 -1.652,0.644 -4.032,0.644 -2.66,0 -4.704,-0.84 -2.044,-0.868 -3.192,-2.492 -1.148,-1.624 -1.148,-3.92 0,-2.296 1.12,-3.92 1.12,-1.652 3.108,-2.52 2.016,-0.8680001 4.704,-0.8680001 2.744,0 4.564,0.8680001 1.82,0.868 2.688,2.632 0.896,1.736 0.756,4.452 h -13.272 q 0.14,1.064 0.784,1.932 0.672,0.868 1.792,1.372 1.148,0.504 2.716,0.504 1.736,0 2.884,-0.588 1.176,-0.616 1.512,-1.568 z m -4.592,-6.832 q -2.016,0 -3.276,0.896 -1.26,0.868 -1.624,2.156 h 9.464 q -0.14,-1.4 -1.344,-2.212 -1.176,-0.84 -3.22,-0.84 z m 26.97602,8.932 -1.148,-0.028 4.536,-11.368 h 4.004 l -6.132,13.916 h -3.416 l -4.48,-11.228 h 1.232 l -4.62,11.228 h -3.416 l -5.964,-13.916 h 4.004 l 4.368,11.396 h -1.148 l 4.088,-11.396 h 4.172 z m 14.15206,2.828 q -2.072,0 -3.78,-0.896 -1.68,-0.924 -2.688,-2.548 -0.98,-1.652 -0.98,-3.808 0,-2.212 1.008,-3.836 1.008,-1.624 2.716,-2.52 1.736,-0.9240001 3.92,-0.9240001 2.408,0 3.864,0.9800001 1.484,0.952 2.156,2.604 0.672,1.652 0.672,3.696 0,1.232 -0.392,2.52 -0.392,1.26 -1.204,2.352 -0.812,1.064 -2.128,1.736 -1.316,0.644 -3.164,0.644 z m 1.176,-2.8 q 1.652,0 2.856,-0.56 1.204,-0.56 1.848,-1.568 0.644,-1.008 0.644,-2.324 0,-1.428 -0.672,-2.408 -0.644,-1.008 -1.848,-1.512 -1.176,-0.532 -2.828,-0.532 -2.324,0 -3.612,1.232 -1.288,1.204 -1.288,3.22 0,1.344 0.616,2.352 0.616,0.98 1.708,1.54 1.12,0.56 2.576,0.56 z m 5.348,-11.424 h 3.64 v 13.916 h -3.388 q 0,0 -0.084,-0.532 -0.056,-0.56 -0.112,-1.4 -0.056,-0.84 -0.056,-1.652 z m 4.46398,0 h 10.808 v 2.828 h -10.808 z m 3.584,-3.8080001 h 3.64 V 23.922516 h -3.64 z M 200.97,19.302516 h 3.528 q -0.224,1.428 -1.204,2.548 -0.952,1.12 -2.604,1.764 -1.652,0.644 -4.032,0.644 -2.66,0 -4.704,-0.84 -2.044,-0.868 -3.192,-2.492 -1.148,-1.624 -1.148,-3.92 0,-2.296 1.12,-3.92 1.12,-1.652 3.108,-2.52 2.016,-0.8680001 4.704,-0.8680001 2.744,0 4.564,0.8680001 1.82,0.868 2.688,2.632 0.896,1.736 0.756,4.452 h -13.272 q 0.14,1.064 0.784,1.932 0.672,0.868 1.792,1.372 1.148,0.504 2.716,0.504 1.736,0 2.884,-0.588 1.176,-0.616 1.512,-1.568 z m -4.592,-6.832 q -2.016,0 -3.276,0.896 -1.26,0.868 -1.624,2.156 h 9.464 q -0.14,-1.4 -1.344,-2.212 -1.176,-0.84 -3.22,-0.84 z m 9.39199,-2.464 h 3.64 v 13.916 h -3.64 z m 8.988,2.996 q -1.568,0 -2.716,0.616 -1.148,0.588 -1.848,1.456 -0.7,0.868 -0.98,1.68 l -0.028,-1.54 q 0.028,-0.336 0.224,-0.98 0.196,-0.672 0.588,-1.428 0.392,-0.784 1.036,-1.484 0.644,-0.728 1.568,-1.176 0.924,-0.4480001 2.156,-0.4480001 z" />
    </svg>
</div>
