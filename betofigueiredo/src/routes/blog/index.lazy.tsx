import { createLazyFileRoute } from "@tanstack/react-router";
import BlogList from "../../components/BlogList";

export const Route = createLazyFileRoute("/blog/")({
  component: Index,
});

function Index() {
  return (
    <div className="mt-20">
      <BlogList />
    </div>
  );
}
