<<<<<<< Updated upstream
# VSCode 常用功能
## 快捷键
* 单行注释：[Ctrl+k,Ctrl+c]
* 移动行：alt+up/down
* 显示/隐藏左侧目录行：ctrl+b
* 行增加缩进：ctrl+[
* 行减少缩进：ctrl+]
## 插件的安装
打开Visual Studio Code，使用快捷键"Ctrrl + Shift + p"打开命令面板，输入"Extensions: Install Extension"，等待插件名列表加载；

然后在输入框"EXTENSIONS"输入插件名，点击安装；

安装完毕点击启用，并重启VS Code；

## VSCode 和 git
*本章来源：[VSCode 中文文档](https://jeasonstudio.gitbooks.io/vscode-cn-doc/content/md/%E7%BC%96%E8%BE%91%E5%99%A8/%E7%89%88%E6%9C%AC%E6%8E%A7%E5%88%B6.html)*

### 概述
VS Code 已经集成了 Git 并支持 Git 的大部分常用命令，这使得它是你在开发过程中，管理你的代码并提交的良好选择。

左侧的 Git 图标将**始终指示您当前在仓库中有多少的更改**。单击它将显示当前仓库更改的详细信息：**未暂存，暂存和未解决的冲突合并更改**。

单击每个文件将详细显示**每个文件中的文本更改**。注意，对于未暂存的更改，右侧的编辑器仍然允许您编辑文件：使用时放轻松！

您还可以在 VS Code 的左下角找到**仓库的状态栏**：当前分支，dirty indicators以及当前分支的Git Pull和Git Push提交数。您可以通过单击该状态栏并从列表中选择 Git 引用来切换到仓库中的任何分支。

### Git 状态栏操作
如果当前切换到的分支配置了上游分支时，在 Git 状态栏中，在分支指示符旁边有一个**同步操作**。

如果没有配置上游分支并且 Git 仓库已配置远程仓库，那么将启用 PUSH 操作。这将允许您将当前分支 PUSH 到远程。

### 提交
**分段**和**拆分**可以通过文件中的上下文操作或通过拖放来完成。

您可以在更改上方输入Commit Message，然后按kbstyle（Ctrl + Enter） （Mac：kbstyle（⌘+ Enter））提交它们。如果有任何分阶段的更改，只有那些添加提交的将被提交，否则所有更改都将提交。

我们发现这是一个伟大的工作流。例如，在上一个屏幕截图中，只有 config.js 文件被包含在 commit 中。连续的提交操作将提交 vinyl-zip.js 和 tests.js。

更具体的 commit操作 可以在 Git 视图顶部的...菜单中找到。

### 分支和标签
你可以通过快速打开，在 VS Code 内直接创建和切换分支。按kb（workbench.action.quickOpen），键入 git ，然后按 空格键 。

如果您键入checkout并再次按kbstyle(Space)，您将看到一个下拉列表，其中包含当前仓库中的所有分支或标记。

使用git branch命令可以快速创建一个新的分支。你只需提供新分支的名称，VS Code 将创建分支并切换到它。

### Remotes
鉴于您的仓库可能连接到远程，并且您的当前分支有一个上游分支，链接到该远程分支，VS Code 提供了方便的集成操作，**push**, **pull** 和 **同步**该分支（后者将运行一个PULL命令，然后PUSH）。您可以在...菜单中找到这些操作。

### 合并冲突
冲突的合并由 VS Code 识别；我们尝试提供有用的着色标记，以帮助您解决它们。一旦解决，突出冲突的文件，以便您可以提交这些更改。

### 查看差异
首先右键单击WORKING FILES列表中的文件并选择选择进行比较，然后右键单击要比较的第二个文件，然后选择与'file_name_you_chose'比较，即可对任何两个文件进行diff。或者从键盘按下kb（workbench.action.showCommands）并选择文件：比较活动文件与其他，您将看到一个最近的文件的列表。

### Git输出
你可以随时从 Git 输出窗口中看到我们使用的 Git 命令。如果有错误发生时它是非常有用的，或者如果你只是好奇。

要打开Git输出窗口，请运行**View> Toggle Output**，然后从下拉列表中选择 Git。

### 初始化仓库
如果您的工作空间未初始化 Git 仓库，您可以使用Initialise git repository命令轻松创建Git仓库。当 VS Code 没有检测到当前目录存在 Git 仓库时，您将看到一个此工作空间尚未初始化 Git 仓库。消息在Git视图和初始化git仓库命令将可用。

运行**初始化git仓库**将创建必要的Git仓库元数据文件，并将您的工作空间文件显示为未暂存的更改。
=======
# VSCode 常用功能
## 快捷键
* 单行注释：[Ctrl+k,Ctrl+c]
* 移动行：alt+up/down
* 显示/隐藏左侧目录行：ctrl+b
* 行增加缩进：ctrl+[
* 行减少缩进：ctrl+]
## 插件的安装
打开Visual Studio Code，使用快捷键"Ctrrl + Shift + p"打开命令面板，输入"Extensions: Install Extension"，等待插件名列表加载；

然后在输入框"EXTENSIONS"输入插件名，点击安装；

安装完毕点击启用，并重启VS Code；

## VSCode 和 git
*本章来源：[VSCode 中文文档](https://jeasonstudio.gitbooks.io/vscode-cn-doc/content/md/%E7%BC%96%E8%BE%91%E5%99%A8/%E7%89%88%E6%9C%AC%E6%8E%A7%E5%88%B6.html)*

### 概述
VS Code 已经集成了 Git 并支持 Git 的大部分常用命令，这使得它是你在开发过程中，管理你的代码并提交的良好选择。

左侧的 Git 图标将**始终指示您当前在仓库中有多少的更改**。单击它将显示当前仓库更改的详细信息：**未暂存，暂存和未解决的冲突合并更改**。

单击每个文件将详细显示**每个文件中的文本更改**。注意，对于未暂存的更改，右侧的编辑器仍然允许您编辑文件：使用时放轻松！

您还可以在 VS Code 的左下角找到**仓库的状态栏**：当前分支，dirty indicators以及当前分支的Git Pull和Git Push提交数。您可以通过单击该状态栏并从列表中选择 Git 引用来切换到仓库中的任何分支。

### Git 状态栏操作
如果当前切换到的分支配置了上游分支时，在 Git 状态栏中，在分支指示符旁边有一个**同步操作**。

如果没有配置上游分支并且 Git 仓库已配置远程仓库，那么将启用 PUSH 操作。这将允许您将当前分支 PUSH 到远程。

### 提交
**分段**和**拆分**可以通过文件中的上下文操作或通过拖放来完成。

您可以在更改上方输入Commit Message，然后按kbstyle（Ctrl + Enter） （Mac：kbstyle（⌘+ Enter））提交它们。如果有任何分阶段的更改，只有那些添加提交的将被提交，否则所有更改都将提交。

我们发现这是一个伟大的工作流。例如，在上一个屏幕截图中，只有 config.js 文件被包含在 commit 中。连续的提交操作将提交 vinyl-zip.js 和 tests.js。

更具体的 commit操作 可以在 Git 视图顶部的...菜单中找到。

### 分支和标签
你可以通过快速打开，在 VS Code 内直接创建和切换分支。按kb（workbench.action.quickOpen），键入 git ，然后按 空格键 。

如果您键入checkout并再次按kbstyle(Space)，您将看到一个下拉列表，其中包含当前仓库中的所有分支或标记。

使用git branch命令可以快速创建一个新的分支。你只需提供新分支的名称，VS Code 将创建分支并切换到它。

### Remotes
鉴于您的仓库可能连接到远程，并且您的当前分支有一个上游分支，链接到该远程分支，VS Code 提供了方便的集成操作，**push**, **pull** 和 **同步**该分支（后者将运行一个PULL命令，然后PUSH）。您可以在...菜单中找到这些操作。

### 合并冲突
冲突的合并由 VS Code 识别；我们尝试提供有用的着色标记，以帮助您解决它们。一旦解决，突出冲突的文件，以便您可以提交这些更改。

### 查看差异
首先右键单击WORKING FILES列表中的文件并选择选择进行比较，然后右键单击要比较的第二个文件，然后选择与'file_name_you_chose'比较，即可对任何两个文件进行diff。或者从键盘按下kb（workbench.action.showCommands）并选择文件：比较活动文件与其他，您将看到一个最近的文件的列表。

### Git输出
你可以随时从 Git 输出窗口中看到我们使用的 Git 命令。如果有错误发生时它是非常有用的，或者如果你只是好奇。

要打开Git输出窗口，请运行**View> Toggle Output**，然后从下拉列表中选择 Git。

### 初始化仓库
如果您的工作空间未初始化 Git 仓库，您可以使用Initialise git repository命令轻松创建Git仓库。当 VS Code 没有检测到当前目录存在 Git 仓库时，您将看到一个此工作空间尚未初始化 Git 仓库。消息在Git视图和初始化git仓库命令将可用。

运行**初始化git仓库**将创建必要的Git仓库元数据文件，并将您的工作空间文件显示为未暂存的更改。
>>>>>>> Stashed changes
