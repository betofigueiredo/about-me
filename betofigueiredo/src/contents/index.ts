import { Content } from "../customTypes";
import best_quality_in_a_software_developer from "./2025-01-03-best-quality-in-a-software-developer";
import biggest_problem_with_scrum from "./2025-01-05-biggest-problem-with-scrum";
import reflections_about_reading from "./2025-01-15-reflections-about-reading";
import be_careful_about_your_dependencies from "./2025-01-18-be-careful-about-your-dependencies";

const contents: Content[] = [
  best_quality_in_a_software_developer,
  biggest_problem_with_scrum,
  reflections_about_reading,
  be_careful_about_your_dependencies,
].sort(
  (a, b) =>
    new Date(a.publishedAt).getTime() - new Date(b.publishedAt).getTime()
);

export default contents;
