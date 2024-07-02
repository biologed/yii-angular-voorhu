export interface RootInterface {
  subscriptionKind: string;
  isReadOnly: boolean;
  accessRights: AccessRights;
  isBlackListed: boolean;
  allowedPromoTypes: string[];
  publicWebSocketChannel: string;
  owner: Owner;
  title: string;
  subscription?: any;
  description: Description[];
  isSubscribed: boolean;
  socialLinks: SocialLink[];
  blogUrl: string;
  coverUrl: string;
  isBlackListedByUser: boolean;
  isTotalBaned: boolean;
  flags: Flags;
  hasAdultContent: boolean;
  signedQuery: string;
  isOwner: boolean;
  count: Count;
}

export interface Count {
  posts: number;
  subscribers: number;
}

export interface Flags {
  allowIndex: boolean;
  hasTargets: boolean;
  isRssFeedEnabled: boolean;
  isPayoutBlocked: boolean;
  allowGoogleIndex: boolean;
  hasSubscriptionLevels: boolean;
  acceptDonationMessages: boolean;
  showPostDonations: boolean;
  isVerifyPayoutBlocked: boolean;
  isPaymentAcceptBlocked: boolean;
}

export interface SocialLink {
  url: string;
  type: string;
}

export interface Description {
  modificator: string;
  type: string;
  content: string;
}

export interface Owner {
  externalApps: ExternalApps;
  id: number;
  avatarUrl: string;
  name: string;
  hasAvatar: boolean;
}

export interface ExternalApps {
  discord: Discord;
  telegram: Telegram;
}

export interface Telegram {
  hasAccount: boolean;
  username: string;
}

export interface Discord {
  hasAccount: boolean;
  serverName: string;
  username: string;
  hasServer: boolean;
}

export interface AccessRights {
  canCreate: boolean;
  canCreateComments: boolean;
  canEdit: boolean;
  canSetPayout: boolean;
  canDeleteComments: boolean;
  canView: boolean;
}
