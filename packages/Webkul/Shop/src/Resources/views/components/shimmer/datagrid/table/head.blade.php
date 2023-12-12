@props(['isMultiRow' => false])

@if (! $isMultiRow)
    <div class="row grid grid-cols-6 gap-2.5 items-center px-6 py-[16px] border-b-[1px] border-[#E9E9E9] bg-gray-50">
        <!-- Mass Actions -->
        <div class="shimmer w-[24px] h-[21px]"></div>

        <div class="shimmer w-[100px] h-[21px]"></div>

        <div class="shimmer w-[100px] h-[21px]"></div>

        <div class="shimmer w-[100px] h-[21px]"></div>

        <div class="shimmer w-[100px] h-[21px]"></div>

        <div class="shimmer w-[100px] h-[21px] place-self-end"></div>
    </div>
@else
    <div class="row grid grid-cols-[2fr_1fr_1fr] gap-2.5 items-center px-6 py-[16px] border-b-[1px] border-[#E9E9E9] tems-center">
        <!-- Mass Actions -->
        <div class="flex gap-2.5 items-center">
            <div class="shimmer w-[24px] h-[24px]"></div>

            <div class="shimmer w-[200px] h-[21px]"></div>
        </div>

        <div class="shimmer w-[200px] h-[21px]"></div>

        <div class="shimmer w-[200px] h-[21px]"></div>
    </div>
@endif