<div class="card">

    @if ($slot->isEmpty())
        Slot Content Is Empty!
    @else
        {{ $slot }}
    @endif

    <div class="card-header">
        {{ $title ?? '' }}
    </div>

    <div class="card-footer">
        {{ $footer ?? '' }}
    </div>

</div>


//component slot

A component slot is a placeholder where you can insert custom content when you use the component.

It allows you to pass different pieces of content into a pre-defined sections of a component making the component
flexible and reusable.

TYPES OF SLOTS
1. DEFAULT SLOTS
2. NAMED SLOTS
