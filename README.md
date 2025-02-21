# FlowDeer Tree - AI tools for complex workflows and deep thoughts

[简体中文](README.md) | [English](README_EN.md)

> 本仓库用于FlowDeer Tree在线版的hosting，独立部署版的下载


![](images/20250221163853.png)

# 3.0.1

- 支持DeepSeek R1，显示思考链


# 2.0

- 任务支持分拆到AI成员，任务名称使用 @成员::场景 可以直接指派
- 支持前一个任务结论作为上下文
- 支持相关任务结论作为上下文
- 支持单独复制和导入AI成员（JSON格式）
- 支持节点顺序调整

- \[Pro\]支持调用外部API（插件）
- \[Pro\]支持自定义默认任务分拆、任务执行、总结和重写输出的提示词



## 使用教程

![](images/20230828105059.png)

[Youtube](https://youtu.be/vz1xBKzLAVM)  | [B站](https://www.bilibili.com/video/BV1xP411Y7ak/)

## 在线版

可访问 [fdt.level06.com](https://fdt.level06.com) 使用，该站点部署在GitHub，如果访问较慢，可以下载独立部署版执行部署。

## 独立部署版

### 一键部署到 Vercel

[![Deploy with Vercel](https://vercel.com/button)](https://vercel.com/new/clone?repository-url=https%3A%2F%2Fgithub.com%2Feasychen%2Fflowdeer-dist.git&root-directory=docs)

### 部署到任意host

1. 下载本仓库代码
1. [docs](./docs/) 目录下为即为独立部署版代码，可复制到支持静态网页的服务器、或者对象存储
1. 注意服务器需要支持 WASM 文件。
