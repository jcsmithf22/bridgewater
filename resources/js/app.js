import {
  Livewire,
  Alpine,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import "./bootstrap";
import intersect from "@alpinejs/intersect";

Alpine.plugin(intersect);
Livewire.start();
