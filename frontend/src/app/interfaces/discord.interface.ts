export interface RootInterface {
  type: number;
  code: string;
  inviter: InviterInterface;
  expires_at?: never;
  flags: number;
  guild: GuildInterface;
  guild_id: string;
  channel: ChannelInterface;
  approximate_member_count: number;
  approximate_presence_count: number;
}

export interface ChannelInterface {
  id: string;
  type: number;
  name: string;
}

export interface GuildInterface {
  id: string;
  name: string;
  splash?: never;
  banner?: never;
  description?: never;
  icon: string;
  features: string[];
  verification_level: number;
  vanity_url_code?: never;
  nsfw_level: number;
  nsfw: boolean;
  premium_subscription_count: number;
}

export interface InviterInterface {
  id: string;
  username: string;
  avatar: string;
  discriminator: string;
  public_flags: number;
  flags: number;
  banner?: never;
  accent_color: number;
  global_name: string;
  avatar_decoration_data?: never;
  banner_color: string;
  clan?: never;
}
