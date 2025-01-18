import { FC, useEffect, useState } from "react";
import { Link } from "@tanstack/react-router";
import { Content } from "../customTypes";
import contents from "../contents/index";
import utils from "../utils";

type Props = { limit?: number };

const BlogList: FC<Props> = ({ limit }) => {
  const [publishedContents, setPublishedContents] = useState<Content[]>([]);

  useEffect(() => {
    const publishedContents = utils.contents.filter({ contents, limit });
    setPublishedContents(publishedContents);
  }, [limit]);

  return (
    <div>
      {publishedContents.map((post) => (
        <div key={post.slug} className="mb-12">
          <p className="mb-1 text-sm text-gray-600 tracking-wider">
            {utils.dates.format(post.publishedAt)}
          </p>
          <p className="mb-1 text-4xl font-bold text-[#212830] font-display">
            <Link
              to={`/blog/$slug`}
              params={{ slug: post.slug }}
              className="hover:text-[#475763] transition-all"
            >
              {post.title}
            </Link>
          </p>
          <p className="mb-1 text-gray-600 font-serif">{post.subtitle}</p>
          <p className="font-serif">
            {post.tags.map((tag) => (
              <span key={tag}>#{tag}</span>
            ))}
          </p>
        </div>
      ))}
    </div>
  );
};

export default BlogList;
