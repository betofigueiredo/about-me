export type Content = {
  draft: boolean;
  slug: string;
  title: string;
  subtitle: string;
  tags: string[];
  publishedAt: string;
  content: React.ReactNode;
};
