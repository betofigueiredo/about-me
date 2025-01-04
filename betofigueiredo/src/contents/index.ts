import { Content } from "../customTypes";
import best_quality_in_a_software_developer from "./2025-01-03-best-quality-in-a-software-developer";

const contents: Content[] = [best_quality_in_a_software_developer].sort(
  (a, b) =>
    new Date(a.publishedAt).getTime() - new Date(b.publishedAt).getTime()
);

export default contents;
