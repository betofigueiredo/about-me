import { Content } from "../customTypes";
import best_quality_in_a_software_developer from "./2025-01-03-best-quality-in-a-software-developer";
import biggest_problem_with_scrum from "./2025-01-05-biggest-problem-with-scrum";

const contents: Content[] = [
  best_quality_in_a_software_developer,
  biggest_problem_with_scrum,
].sort(
  (a, b) =>
    new Date(a.publishedAt).getTime() - new Date(b.publishedAt).getTime()
);

export default contents;
