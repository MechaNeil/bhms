import { max as mathMax, min as mathMin } from "@popperjs/core/lib/utils/math.js";
export function within(min, value, max) {
  return mathMax(min, mathMin(value, max));
}
export function withinMaxClamp(min, value, max) {
  var v = within(min, value, max);
  return v > max ? max : v;
}